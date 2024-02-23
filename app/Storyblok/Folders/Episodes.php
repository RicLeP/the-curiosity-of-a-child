<?php


namespace App\Storyblok\Folders;


class Episodes extends \App\Storyblok\Folder
{
    protected string $slug = 'episode';
    protected string $sortBy = 'content.date';
	protected int $perPage = 12;
}
