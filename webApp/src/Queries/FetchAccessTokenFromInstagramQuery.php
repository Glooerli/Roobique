<?php
/**
 * Created by PhpStorm.
 * User: Lukas
 * Date: 26.02.2016
 * Time: 09:24
 */

namespace roobique\Queries
{

    use roobique\ValueObjects\Uri;
    use roobique\Wrappers\Curl;

    class FetchAccessTokenFromInstagramQuery
    {
        /**
         * @var Curl
         */
        private $curl;

        /**
         * @var Uri
         */
        private $uri;

        /**
         * @var string
         */
        private $clientID;

        /**
         * @var string
         */
        private $clientSecret;
        private $redirectUri;

        /**
         * FetchAccessTokenFromInstagramQuery constructor.
         * @param Curl $curl
         * @param Uri $uri
         * @param $clientID
         * @param $clientSecret
         * @param $redirectUri
         */
        public function __construct(Curl $curl, Uri $uri, $clientID, $clientSecret, $redirectUri)
        {
            $this->curl = $curl;
            $this->uri = $uri;
            $this->clientID = $clientID;
            $this->clientSecret = $clientSecret;
            $this->redirectUri = $redirectUri;
        }

        public function execute($code)
        {
            return json_decode(
                $this->curl->post(
                    $this->uri,
                    [
                        'client_id' => $this->clientID,
                        'client_secret' => $this->clientSecret,
                        'grant_type' => 'authorization_code',
                        'redirect_uri' => $this->redirectUri,
                        'code' => $code
                    ],
                    [CURLOPT_RETURNTRANSFER => 1, CURLOPT_SSL_VERIFYPEER => true]
                ),
                true
            );
        }
    }
}