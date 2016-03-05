<?php

namespace Avi\Bundle\JobBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Avi\Bundle\JobBundle\Entity\Category;
use Avi\Bundle\JobBundle\Form\CategoryType;

/**
 * Category controller.
 *
 * @Route("/avi-category")
 */
class CategoryController extends Controller {

    /**
     * Lists all Category entities.
     *
     * @Route("/", name="avi-category_index")
     * @Method("GET")
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('AviJobBundle:Category')->findAll();

        return $this->render('AviJobBundle:category/index.html.twig', array(
                    'categories' => $categories,
        ));
    }

    /**
     * Creates a new Category entity.
     *
     * @Route("/new", name="avi-category_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request) {
        $category = new Category();
        $form = $this->createForm('Avi\Bundle\JobBundle\Form\CategoryType', $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $file = $category->getImg();

            $fileName = md5(uniqid()) . '.' . $file->guessExtension();

            $imgDir = $this->container->getParameter('kernel.root_dir') . '/../web/uploads/images';

            $file->move($imgDir, $fileName);


            $category->setImg($fileName);


            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();

            return $this->redirectToRoute('avi-category_show', array('id' => $category->getId()));
        }

        return $this->render('AviJobBundle:category/new.html.twig', array(
                    'category' => $category,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Category entity.
     *
     * @Route("/{id}", name="avi-category_show")
     * @Method("GET")
     */
    public function showAction(Category $category) {
        $deleteForm = $this->createDeleteForm($category);

        return $this->render('AviJobBundle:category/show.html.twig', array(
                    'category' => $category,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Category entity.
     *
     * @Route("/{id}/edit", name="avi-category_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Category $category) {
        $deleteForm = $this->createDeleteForm($category);
        $editForm = $this->createForm('Avi\Bundle\JobBundle\Form\CategoryType', $category);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();

            return $this->redirectToRoute('avi-category_edit', array('id' => $category->getId()));
        }

        return $this->render('AviJobBundle:category/edit.html.twig', array(
                    'category' => $category,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Category entity.
     *
     * @Route("/{id}", name="avi-category_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Category $category) {
        $form = $this->createDeleteForm($category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($category);
            $em->flush();
        }

        return $this->redirectToRoute('avi-category_index');
    }

    /**
     * Creates a form to delete a Category entity.
     *
     * @param Category $category The Category entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Category $category) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('avi-category_delete', array('id' => $category->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

}
