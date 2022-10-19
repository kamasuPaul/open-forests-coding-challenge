<?php

namespace App\Containers\AppSection\Category\Data\Seeders;

use App\Containers\AppSection\Category\Tasks\CreateCategoryTask;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Seeders\Seeder as ParentSeeder;

class CategorySeeder extends ParentSeeder
{
    public function __construct(
        protected CreateCategoryTask $categoryTask
    ){}

    /**
     * @return void
     * @throws CreateResourceFailedException
     */
    public function run(): void
    {
        $categories = [
            ['label' => 'Environmental'],
            ['label' => 'Politics'],
            ['label' => 'Business'],
            ['label' => 'Private'],
        ];

        foreach($categories as $category) {
            $this->categoryTask->run($category);
        }
    }
}
