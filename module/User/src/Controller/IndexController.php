<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace User\Controller;

use User\Entity\Post;
use Doctrine\ORM\EntityManager;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    protected $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function indexAction()
    {
       // $entityManager = $con

        $post = new Post();
        $post->setTitle('Top 10+ Books about Zend Framework 3');
        $post->setContent('Post body goes here');
        $post->setStatus(Post::STATUS_PUBLISHED);
        $currentDate = date('Y-m-d H:i:s');
        $post->setDateCreated($currentDate);
        $this->entityManager->persist($post);

        $this->entityManager->flush();
        return new ViewModel();
    }
}
