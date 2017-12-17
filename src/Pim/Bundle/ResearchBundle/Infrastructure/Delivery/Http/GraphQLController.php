<?php

namespace Pim\Bundle\ResearchBundle\Infrastructure\Delivery\Http;

use GraphQL\GraphQL;
use GraphQL\Type\Schema;
use Pim\Bundle\ResearchBundle\Infrastructure\Delivery\API\GraphQL\Type\QueryType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class GraphQLController
{
    /** @var QueryType */
    private $queryType;

    /**
     * @param QueryType $queryType
     */
    public function __construct(QueryType $queryType)
    {
        $this->queryType = $queryType;
    }

    /**
     * @return Response
     */
    public function handleGraphQLRequest(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        $data = $data['query'];

        $schema = new Schema([
            'query' => $this->queryType,
        ]);

        $result = GraphQL::executeQuery(
            $schema,
            $data,
            null,
            null,
            null
        );

        $output = $result->toArray();

        return new JsonResponse($output);
    }
}
