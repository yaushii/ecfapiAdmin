<?php

namespace App\Tests;use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{    public function testLoginPage()
   {
       // create Client
       $client = static::createClient();
       // Go to the 'URL `/login`
       $crawler = $client->request('GET', '/inscription');
       // Check that the server responds with an HTTP 200
       $this->assertSame(200, $client->getResponse()->getStatusCode());
       // Check that the `Email` text is in the `body` tag
       $this->assertContains('Email', $crawler->filter('body')->text());
       // Check that the `mot de passe` text is in the `body` tag
       $this->assertContains('Mot de passe', $crawler->filter('body')->text());
   }}