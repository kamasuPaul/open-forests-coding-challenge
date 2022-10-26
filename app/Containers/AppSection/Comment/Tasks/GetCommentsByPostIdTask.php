<?php

namespace App\Containers\AppSection\Comment\Tasks;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Comment\Data\Repositories\CommentRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Prettus\Repository\Exceptions\RepositoryException;

class GetCommentsByPostIdTask extends ParentTask
{
    public function __construct(
        protected CommentRepository $repository
    ) {
    }

    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run($postId): mixed
    {
        return $this->addRequestCriteria()->repository->findByField([
            'post_id' => $postId,
        ]);
    }
}
