<?php

namespace App;

use Baum\Node;

class Category extends Node
{
    protected $visible = ['id', 'name', 'children'];
}
