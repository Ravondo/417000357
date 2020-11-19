<?php
namespace Quwi\framework;

Interface Command_Interface
{
    public function execute(CommandContext $context): bool;
}