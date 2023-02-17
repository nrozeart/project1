<?php
require_once 'User.php';
require_once 'Task.php';
require_once 'Comment.php';

class TaskService {
    public static function addComment(User $user, Task $task, string $text): void {
        $comment = new Comment($user, $task, $text);
        $task->addComment($comment);
    }
}