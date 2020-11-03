<?php


namespace Core;


class View
{
    public function generate($contentView, $templateView = 'template-view.php', $data = null)
    {
        include '../application/views/' . $templateView;
    }

    public function create($contentView, $data = null)
    {
        include '../application/views/' . $contentView;
    }
}