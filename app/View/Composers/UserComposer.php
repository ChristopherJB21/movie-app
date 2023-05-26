<?php
 
namespace App\View\Composers;
 
use App\Services\UserService;
use Illuminate\View\View;
 
class UserComposer
{
    /**
     * Create a new user composer.
     */
    private UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
 
    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $view->with('UserRole', $this->userService->getUserRole());
    }
}