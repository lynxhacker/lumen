<?php

class CollectionTest extends TestCase
{
    /**
     * @test
     */
    public function get_a_collection_by_name()
    {
        $response = $this->client->get('/collections/travel'); 

        $expected = [
            'id' => 'string', 
            'type' => 'in:travel, news', 
            'attributes' => [
                'page_id' => 'string', 
                'position' => 'integer', 
            ]
        ];
        
        $this->assertEquals(
            self::HTTP_OK,
            $response->getStatusCode()
        );

        //$this->assertValidArray($expected, $this->getResponseArray($response)['data'][0]); 
    }
}
