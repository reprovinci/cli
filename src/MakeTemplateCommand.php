<?php

namespace Kirby\Cli;

class MakeTemplateCommand extends MakeCommand {

  protected $what      = 'template';
  protected $info      = 'Creates a new template';
  protected $help      = 'Sets the name of the template';
  protected $dir       = 'site/templates';
  protected $extension = 'php';

}