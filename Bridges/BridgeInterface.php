<?php

namespace PHPPM\Bridges;

interface BridgeInterface
{
    public function bootstrap();
    public function onRequest(\React\Http\Request $request, \React\Http\Response $response);
}