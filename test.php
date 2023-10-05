<?php
use kbATeam\MarkdownTable\Table;
use kbATeam\MarkdownTable\Column;
require 'vendor/autoload.php';
$data = [
  [
    'A' => 'markdown',
    // 'b' => 'is'
  ],
  [
    // 'A' => 'great',
    'B' => 'software',
  ]
];
$table = new Table();
$table->addColumn('A', new Column('Column A', Column::ALIGN_RIGHT));
$table->addColumn('B', new Column('another Column', Column::ALIGN_LEFT));
// $table->generate($data);
echo $table->getString($data);