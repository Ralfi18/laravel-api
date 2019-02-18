<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class BooksCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        return parent::toArray($request);
        // return[
        //     'id' => $this->id,
        //     'title' => $this->title,
        //     'author' => $this->author,
        //     'created_at' => (string) $this->created_at,
        //     'updated_at' => (string) $this->updated_at,
        // ];
        // return[
        //     'data' => $this->collection,
        //     'links' => [
        //         'self' => 'link-value',
        //     ],
        // ];
    }
}
