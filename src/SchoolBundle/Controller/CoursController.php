<?php

namespace SchoolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use SchoolBundle\Entity\Cours;
use SchoolBundle\Form\CoursType;
use Symfony\Component\HttpFoundation\Request;


/**
 * Cours controller.
 *
 * @Route("/cours")
 */
class CoursController extends Controller
{
    /**
     * @Route("/new/classe/{idClasse}/matiere/{idMatiere}", name="new_cours")
     * @Method({"GET", "POST"})
     */
    public function addAction(Request $request)
    {   
        $em = $this->getDoctrine()->getManager();
        $cours= new Cours();
        $form=$this->createForm(CoursType::class,$cours);
        $form->handleRequest($request);
        $idMatiere=$request->attributes->get('idMatiere');
        $idClasse=$request->attributes->get('idClasse');
        
        if($form->isSubmitted() && $form->isValid()){
            //Initialisation des ids
            extract($_POST);
            
            $matiere=$em->getRepository('SchoolBundle:Matiere')->findOneBy(array('id'=>$idMatiere));
            $classe=$em->getRepository('SchoolBundle:Classe')->findOneBy(array('id'=>$idClasse));
            //  $coru->setEcole($this->getUser()->getEcole());

            $uploaded_file = $form['devoir']->getData();
            if(!empty($cours->getDevoir()) && $uploaded_file)
            {
                $file = $cours->getDevoir();
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $file->move(
                    $this->getParameter('uploads_cours_devoir'),
                    $fileName
                );
                $cours->setDevoir($fileName);
            }

             $uploaded_file = $form['support']->getData();
            if(!empty($cours->getSupport()) && $uploaded_file)
            {
                $file = $cours->getSupport();
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $file->move(
                    $this->getParameter('uploads_cours_support'),
                    $fileName
                );
                $cours->setSupport($fileName);
            }

             $uploaded_file = $form['annexe']->getData();
            if(!empty($cours->getAnnexe()) && $uploaded_file)
            {
                $file = $cours->getAnnexe();
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $file->move(
                    $this->getParameter('uploads_cours_annexe'),
                    $fileName
                );
                $cours->setAnnexe($fileName);
            }

            $cours->setMatiere($matiere);
            $cours->setClasse($classe);

            $em=$this->getDoctrine()->getManager();
            $em->persist($cours);
            $em->flush();
            return $this->redirectToRoute('showEleve',array('idClasse' => $idClasse,'idMatiere' => $idMatiere));
        }

        return $this->render('cours/add.html.twig',array("form"=>$form->createView(),'idClasse'=>$idClasse,'idMatiere'=>$idMatiere));
    }

    /**
     * Displays a form to edit an existing cours entity.
     *
     * @Route("/{id}/edit", name="edit_cours")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Cours $cours)
    {
        $em=$this->getDoctrine()->getManager();
        $editForm = $this->createForm(CoursType::class, $cours);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            
            
            $uploaded_file_devoir = $editForm['devoir']->getData();
            
            if($uploaded_file_devoir != null)
            {
                $file = $cours->getDevoir();
                
                $em->clear();
                $cours_tmp = $em->getRepository('SchoolBundle:Cours')->findOneBy(array('id'=>$cours->getId()));
                $devoir=$this->getParameter('uploads_cours_devoir').'/'.$cours_tmp->getDevoir();
                unlink($devoir);
            
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $file->move( $this->getParameter('uploads_cours_devoir'),
                    $fileName
                );
                $cours->setDevoir($fileName);
            }else{
                $em->clear();
                $cours_tmp = $em->getRepository('SchoolBundle:Cours')->findOneBy(array('id'=>$cours->getId()));
                $cours->setDevoir($cours_tmp->getDevoir());

            }

            $uploaded_file_support = $editForm['support']->getData();
            
            if($uploaded_file_support != null)
            {
                $file = $cours->getSupport();
                
                $em->clear();
                $cours_tmp = $em->getRepository('SchoolBundle:Cours')->findOneBy(array('id'=>$cours->getId()));
                $support=$this->getParameter('uploads_cours_support').'/'.$cours_tmp->getSupport();
                unlink($support);

                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $file->move( $this->getParameter('uploads_cours_support'),
                    $fileName
                );
                $cours->setSupport($fileName);
            }else{
                $em->clear();
                $cours_tmp = $em->getRepository('SchoolBundle:Cours')->findOneBy(array('id'=>$cours->getId()));
                $cours->setSupport($cours_tmp->getSupport());

            }
            
            

            $uploaded_file_annexe = $editForm['annexe']->getData();
            
            if($uploaded_file_annexe != null)
            {
                $file = $cours->getAnnexe();

                $em->clear();
                $cours_tmp = $em->getRepository('SchoolBundle:Cours')->findOneBy(array('id'=>$cours->getId()));
                $annexe=$this->getParameter('uploads_cours_annexe').'/'.$cours_tmp->getAnnexe();
                unlink($annexe);
        
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $file->move( $this->getParameter('uploads_cours_annexe'),
                    $fileName
                );
                $cours->setAnnexe($fileName);
            }else{
                $em->clear();
                $cours_tmp = $em->getRepository('SchoolBundle:Cours')->findOneBy(array('id'=>$cours->getId()));
                $cours->setAnnexe($cours_tmp->getAnnexe());

            }

            $em->merge($cours);
            $em->flush();
           
             
            return $this->redirectToRoute('edit_cours', array('id' => $cours->getId()));
        }

        return $this->render('cours/edit.html.twig', array(
            'cours' => $cours,
            'edit_form' => $editForm->createView()
        ));
    }


      /**
     * @Route("/delete/{id}", name="delete_cours")
     */
    public function deleteAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $id=$request->attributes->get('id');
        $cours=$em->getRepository('SchoolBundle:Cours')->findOneBy(array('id'=> $id));

        $annexe=$this->getParameter('uploads_cours_annexe').'/'.$cours->getAnnexe();
        $devoir=$this->getParameter('uploads_cours_devoir').'/'.$cours->getDevoir();
        $support=$this->getParameter('uploads_cours_support').'/'.$cours->getSupport();

        unlink($annexe);
        unlink($devoir);
        unlink($support);

        $em->remove($cours);
        $em->flush();
        
        $referer = $request->headers->get('referer');
     
        return $this->redirect($referer);  
    }

}
