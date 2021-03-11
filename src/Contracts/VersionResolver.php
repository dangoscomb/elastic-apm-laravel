<?php


namespace DanGoscomb\ElasticApmLaravel\Contracts;


interface VersionResolver
{
    public function getVersion(): string;
}
