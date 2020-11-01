<?php
namespace App\Models;

/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class Places {

    //mock data : an array of records
    protected $data = [
        '1' => [
            'id' => 30,
            'name' => 'Stephen Curry',
            'Country' => 'USA',
            'description' => 'Accurate, quick shooter, good at stealing and shooting 3-pointers',
            'link' => 'https://china.nba.com/warriors/',
            'image' => '30.png',
        ],
        '2' => [
            'id' => 11,
            'name' => 'Klay Thompson',
             'Country' => 'USA',
            'description' => 'Top three point shooting and defense',
            'link' => 'https://china.nba.com/warriors/',
            'image' => '11.png',
        ],
        '3' => [
            'id' => 22,
            'name' => 'Andrew Wiggins',
             'Country' => 'Canada',
            'description' => 'Good young player, good physical quality',
            'link' => 'https://china.nba.com/warriors/',
            'image' => '22.png',
        ],
        '4' => [
            'id' => 23,
            'name' => 'Draymond Green',
             'Country' => 'USA',
            'description' => 'Excellent defense and excellent team spirit',
            'link' => 'https://china.nba.com/warriors/',
            'image' => '23.png',
        ],
        '5' => [
            'id' => 32,
            'name' => 'Marquese Chriss',
             'Country' => 'USA',
            'description' => 'Excellent rebounding and under the basket',
            'link' => 'https://china.nba.com/warriors/',
            'image' => '32.png',
        ],
    ];

    public function findAll() {
        return $this->data;
    }

    public function find($id = null) {
        if (!empty($id) && isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }

}
