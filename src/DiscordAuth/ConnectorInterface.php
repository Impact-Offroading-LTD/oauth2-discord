<?php

namespace Impact\DiscordAuth;

interface ConnectorInterface
{
    /**
     * Get the OAuth2 token value from the current information
     *
     * @return string Token value
     */
    public function getToken();
}
