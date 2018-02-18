           SELECT
           		f.code, 
                f.created, 
                f.updated, 
                a_label.code as attribute_as_label_code,
                a_image.code as attribute_as_image_code,
                a.code as attribute_code, 
                c.code as channel_code,
                a_requi.code as attribute_requirement_code
            FROM pim_catalog_family f
            LEFT JOIN pim_catalog_family_attribute fa on fa.family_id = f.id
            LEFT JOIN pim_catalog_attribute a on a.id = fa.attribute_id
            LEFT JOIN pim_catalog_attribute a_label on a_label.id = f.label_attribute_id
            LEFT JOIN pim_catalog_attribute a_image on a_image.id = f.image_attribute_id
            LEFT JOIN pim_catalog_attribute_requirement r on r.family_id = f.id 
            LEFT JOIN pim_catalog_channel c on c.id = r.channel_id and r.required = '1'
            LEFT JOIN pim_catalog_attribute a_requi on a_requi.id = r.attribute_id
            where f.code = 'webcams';
            
            
           SELECT
           		f.code, 
                f.created, 
                f.updated,
                GROUP_CONCAT(DISTINCT a.code SEPARATOR '|') as attributes, 
                a_label.code as attribute_as_label_code,
                a_image.code as attribute_as_image_code,
                c.code as channel_code,
                GROUP_CONCAT(DISTINCT a_requi.code SEPARATOR '|') as attribute_requirements
            FROM pim_catalog_family f
            LEFT JOIN pim_catalog_family_attribute fa on fa.family_id = f.id
            LEFT JOIN pim_catalog_attribute a on a.id = fa.attribute_id
            LEFT JOIN pim_catalog_attribute a_label on a_label.id = f.label_attribute_id
            LEFT JOIN pim_catalog_attribute a_image on a_image.id = f.image_attribute_id
            LEFT JOIN pim_catalog_attribute_requirement r on r.family_id = f.id 
            LEFT JOIN pim_catalog_channel c on c.id = r.channel_id and r.required = '1'
            LEFT JOIN pim_catalog_attribute a_requi on a_requi.id = r.attribute_id
            where f.code ='webcams'
            GROUP BY f.code, c.code;
            
            

            	SELECT
           			f.code, 
                	f.created, 
                	f.updated,
                	a_label.code as attribute_as_label_code,
                	a_image.code as attribute_as_image_code,
                	attributes.attributes,
                	attribute_requirements.channel_code,
                	attribute_requirements.attribute_requirements
            	FROM pim_catalog_family f
            	LEFT JOIN pim_catalog_attribute a_label on a_label.id = f.label_attribute_id
            	LEFT JOIN pim_catalog_attribute a_image on a_image.id = f.image_attribute_id
            	LEFT JOIN (
            		SELECT 
            			f.id as family_attribute_id, 
            			GROUP_CONCAT(DISTINCT a.code SEPARATOR '|') as attributes
            		FROM pim_catalog_family f
            		JOIN pim_catalog_family_attribute fa on fa.family_id = f.id
            		JOIN pim_catalog_attribute a on a.id = fa.attribute_id
            		GROUP BY f.id
            	) as attributes on attributes.family_attribute_id = f.id
            	LEFT JOIN (
            		SELECT
	            	    f.id as family_attribute_id,
    	        	    c.code as channel_code, 
        	    		GROUP_CONCAT(DISTINCT a.code SEPARATOR '|') as attribute_requirements
            		FROM pim_catalog_family f
            		JOIN pim_catalog_attribute_requirement r on r.family_id = f.id 
            		JOIN pim_catalog_channel c on c.id = r.channel_id and r.required = '1'
            		JOIN pim_catalog_attribute a on a.id = r.attribute_id
            		GROUP BY f.id, c.code
            	) as attribute_requirements on attribute_requirements.family_attribute_id = f.id 
				-- where f.code = 'webcams'
				;

            
            
            SELECT @@SESSION.sql_mode;


           SELECT
                JSON_OBJECT(
					'code', f.code,
					'created', f.created,
					'updated', f.updated,
					'attribute_as_label', a_label.code,
					'attribute_as_image', a_image.code,
					'attributes', attributes.attributes,
                    'attribute_requirements', attribute_requirements.attribute_requirements,
                    'labels', labels.labels
			)
            FROM pim_catalog_family f
            LEFT JOIN pim_catalog_attribute a_label on a_label.id = f.label_attribute_id
            LEFT JOIN pim_catalog_attribute a_image on a_image.id = f.image_attribute_id
            LEFT JOIN (
                SELECT
                    f.id as family_label_id,
                    JSON_OBJECTAGG(ft.locale,  ft.label) as labels
				FROM pim_catalog_family f
				JOIN pim_catalog_family_translation ft on ft.foreign_key = f.id
                GROUP BY f.id
			) as labels on labels.family_label_id = f.id
            LEFT JOIN (
                SELECT
                    f.id as family_attribute_id,
                    JSON_ARRAYAGG(a.code) as attributes
                FROM pim_catalog_family f
                JOIN pim_catalog_family_attribute fa on fa.family_id = f.id
                JOIN pim_catalog_attribute a on a.id = fa.attribute_id
                GROUP BY f.id
            ) as attributes on attributes.family_attribute_id = f.id
            LEFT JOIN (
				SELECT
					family_attribute_id,
                    JSON_OBJECTAGG(code, attribute_requirements_per_channel) as attribute_requirements
				FROM (
					SELECT
						f.id as family_attribute_id,
                        c.code,
						JSON_ARRAYAGG(a.code) as attribute_requirements_per_channel
					FROM pim_catalog_family f
					JOIN pim_catalog_attribute_requirement r on r.family_id = f.id
					JOIN pim_catalog_channel c on c.id = r.channel_id and r.required = '1'
					JOIN pim_catalog_attribute a on a.id = r.attribute_id
					GROUP BY f.id, c.code
				) as attribute_requirements_per_channel
                GROUP BY family_attribute_id
            ) as attribute_requirements on attribute_requirements.family_attribute_id = f.id
            GROUP BY f.code, a_label.code, a_image.code;



            SET SESSION sql_mode = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
