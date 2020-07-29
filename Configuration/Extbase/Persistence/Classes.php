<?php
declare(strict_types = 1);

return [
  \GeorgRinger\News\Domain\Model\News::class => [
      'subclasses' => [
          \Mexan\MxnTeam\Domain\Model\Team::class,
          \Mexan\MxnTeam\Domain\Model\Client::class,
          \GeorgRinger\News\Domain\Model\NewsDefault::class,
           \GeorgRinger\News\Domain\Model\NewsInternal::class,
           \GeorgRinger\News\Domain\Model\NewsExternal::class,
      ]
  ],
  \Mexan\MxnTeam\Domain\Model\Team::class => [
      'tableName' => 'tx_news_domain_model_news',
      'recordType' => \Mexan\MxnTeam\Domain\Model\Team::class,
      //'recordType' => 3,
  ],
  \Mexan\MxnTeam\Domain\Model\Client::class => [
      'tableName' => 'tx_news_domain_model_news',
      'recordType' => \Mexan\MxnTeam\Domain\Model\Client::class,
      //'recordType' => 3,
  ],

  /*
  \GeorgRinger\News\Domain\Model\NewsInternal::class => [
      'tableName' => 'tx_news_domain_model_news',
      'recordType' => 1,
  ],
  \GeorgRinger\News\Domain\Model\NewsExternal::class => [
      'tableName' => 'tx_news_domain_model_news',
      'recordType' => 2,
  ],
  */
];
