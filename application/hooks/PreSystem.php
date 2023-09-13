<?php

final class PreSystem
{
    public function load(array $params)
    {
        $this->dotEnv($params['envDir']);
        $this->lazyConfig();
    }

    private function dotEnv(string $envDir): void
    {
        $dotenv = Dotenv\Dotenv::createImmutable($envDir, ['.env.local']);
        $dotenv->load();
    }

    private function lazyConfig(): void
    {
        $replacedConfig = [
            'index_page' => '',
            'base_url' => $_ENV['HOST'] ?? $this->getDefaultHost(),
            'controller_suffix' => 'Controller',
            'use_camel_case' => true
        ];
        get_config($replacedConfig);
    }

    private function getDefaultHost(): string
    {
        $scheme = $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $host = $_SERVER['HTTP_HOST'];

        return "$scheme://$host";
    }
}
