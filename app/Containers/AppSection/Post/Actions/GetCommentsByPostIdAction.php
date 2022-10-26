<?php

namespace App\Containers\AppSection\Post\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Comment\Tasks\GetCommentsByPostIdTask;
use App\Containers\AppSection\Post\Tasks\GetAllCommentsTask;
use App\Containers\AppSection\Post\UI\API\Requests\GetAllCommentsRequest;
use App\Containers\AppSection\Post\UI\API\Requests\GetCommentsByPostIdRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class GetCommentsByPostIdAction extends ParentAction
{
    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(GetCommentsByPostIdRequest $request): mixed
    {
        return app(GetCommentsByPostIdTask::class)->run($request->id);
    }
}
