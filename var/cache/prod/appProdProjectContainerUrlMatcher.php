<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // addAnnee
        if (preg_match('#^/(?P<_locale>[^/]++)/annee/add$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addAnnee')), array (  '_controller' => 'SchoolBundle\\Controller\\AnneeController::addAction',));
        }

        // listAnnees
        if (preg_match('#^/(?P<_locale>[^/]++)/annee/list$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'listAnnees')), array (  '_controller' => 'SchoolBundle\\Controller\\AnneeController::showAction',));
        }

        // editAnnee
        if (preg_match('#^/(?P<_locale>[^/]++)/annee/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editAnnee')), array (  '_controller' => 'SchoolBundle\\Controller\\AnneeController::editAction',));
        }

        // removeAnnee
        if (preg_match('#^/(?P<_locale>[^/]++)/annee/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'removeAnnee')), array (  '_controller' => 'SchoolBundle\\Controller\\AnneeController::removeAction',));
        }

        // addClasse
        if (preg_match('#^/(?P<_locale>[^/]++)/classe/add$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addClasse')), array (  '_controller' => 'SchoolBundle\\Controller\\ClasseController::addAction',));
        }

        // listClasses
        if (preg_match('#^/(?P<_locale>[^/]++)/classe/list$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'listClasses')), array (  '_controller' => 'SchoolBundle\\Controller\\ClasseController::showAction',));
        }

        // editClasse
        if (preg_match('#^/(?P<_locale>[^/]++)/classe/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editClasse')), array (  '_controller' => 'SchoolBundle\\Controller\\ClasseController::editAction',));
        }

        // removeClasse
        if (preg_match('#^/(?P<_locale>[^/]++)/classe/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'removeClasse')), array (  '_controller' => 'SchoolBundle\\Controller\\ClasseController::removeAction',));
        }

        // affectProf
        if (preg_match('#^/(?P<_locale>[^/]++)/classe/affectProf/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'affectProf')), array (  '_controller' => 'SchoolBundle\\Controller\\ClasseController::affectProf',));
        }

        // new_cours
        if (preg_match('#^/(?P<_locale>[^/]++)/cours/new/classe/(?P<idClasse>[^/]++)/matiere/(?P<idMatiere>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_new_cours;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'new_cours')), array (  '_controller' => 'SchoolBundle\\Controller\\CoursController::addAction',));
        }
        not_new_cours:

        // addMatiere
        if (preg_match('#^/(?P<_locale>[^/]++)/matiere/add$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addMatiere')), array (  '_controller' => 'SchoolBundle\\Controller\\MatiereController::addAction',));
        }

        // listMatieres
        if (preg_match('#^/(?P<_locale>[^/]++)/matiere/list$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'listMatieres')), array (  '_controller' => 'SchoolBundle\\Controller\\MatiereController::showAction',));
        }

        // editMatiere
        if (preg_match('#^/(?P<_locale>[^/]++)/matiere/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editMatiere')), array (  '_controller' => 'SchoolBundle\\Controller\\MatiereController::editAction',));
        }

        // removeMatiere
        if (preg_match('#^/(?P<_locale>[^/]++)/matiere/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'removeMatiere')), array (  '_controller' => 'SchoolBundle\\Controller\\MatiereController::removeAction',));
        }

        // showEleve
        if (preg_match('#^/(?P<_locale>[^/]++)/matiere/show/classe/(?P<idClasse>[^/]++)/matiere/(?P<idMatiere>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_showEleve;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'showEleve')), array (  '_controller' => 'SchoolBundle\\Controller\\MatiereController::showEleveAction',));
        }
        not_showEleve:

        // addNote
        if (preg_match('#^/(?P<_locale>[^/]++)/matiere/addNote$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_addNote;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addNote')), array (  '_controller' => 'SchoolBundle\\Controller\\MatiereController::addNoteAction',));
        }
        not_addNote:

        // delete_note
        if (preg_match('#^/(?P<_locale>[^/]++)/matiere/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_note')), array (  '_controller' => 'SchoolBundle\\Controller\\MatiereController::deleteAction',));
        }

        // program_add
        if (preg_match('#^/(?P<_locale>[^/]++)/matiere/program/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'program_add')), array (  '_controller' => 'SchoolBundle\\Controller\\MatiereController::programAction',));
        }

        // addMatiereEvaluation
        if (preg_match('#^/(?P<_locale>[^/]++)/matierevaluation/add/classe/(?P<idClasse>[^/]++)/matiere/(?P<idMatiere>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_addMatiereEvaluation;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addMatiereEvaluation')), array (  '_controller' => 'SchoolBundle\\Controller\\MatiereEvaluationController::addAction',));
        }
        not_addMatiereEvaluation:

        // addMenu
        if (preg_match('#^/(?P<_locale>[^/]++)/menu/add$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addMenu')), array (  '_controller' => 'SchoolBundle\\Controller\\MenuController::addAction',));
        }

        // listMenus
        if (preg_match('#^/(?P<_locale>[^/]++)/menu/list$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'listMenus')), array (  '_controller' => 'SchoolBundle\\Controller\\MenuController::showAction',));
        }

        // editMenu
        if (preg_match('#^/(?P<_locale>[^/]++)/menu/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editMenu')), array (  '_controller' => 'SchoolBundle\\Controller\\MenuController::editAction',));
        }

        // removeMenu
        if (preg_match('#^/(?P<_locale>[^/]++)/menu/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'removeMenu')), array (  '_controller' => 'SchoolBundle\\Controller\\MenuController::removeAction',));
        }

        // programme_new
        if (preg_match('#^/(?P<_locale>[^/]++)/programme/new$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_programme_new;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'programme_new')), array (  '_controller' => 'SchoolBundle\\Controller\\ProgrammeController::newAction',));
        }
        not_programme_new:

        // showClasse
        if (preg_match('#^/(?P<_locale>[^/]++)/programme/show/classe/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'showClasse')), array (  '_controller' => 'SchoolBundle\\Controller\\ProgrammeController::showClasseAction',));
        }

        // showEnseignant
        if (preg_match('#^/(?P<_locale>[^/]++)/programme/show/enseignant/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'showEnseignant')), array (  '_controller' => 'SchoolBundle\\Controller\\ProgrammeController::showEnseignantAction',));
        }

        // addSalle
        if (preg_match('#^/(?P<_locale>[^/]++)/salle/add$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addSalle')), array (  '_controller' => 'SchoolBundle\\Controller\\SalleController::addAction',));
        }

        // listSalles
        if (preg_match('#^/(?P<_locale>[^/]++)/salle/list$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'listSalles')), array (  '_controller' => 'SchoolBundle\\Controller\\SalleController::showAction',));
        }

        // editSalle
        if (preg_match('#^/(?P<_locale>[^/]++)/salle/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editSalle')), array (  '_controller' => 'SchoolBundle\\Controller\\SalleController::editAction',));
        }

        // removeSalle
        if (preg_match('#^/(?P<_locale>[^/]++)/salle/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'removeSalle')), array (  '_controller' => 'SchoolBundle\\Controller\\SalleController::removeAction',));
        }

        // addSchool
        if (preg_match('#^/(?P<_locale>[^/]++)/school/add$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addSchool')), array (  '_controller' => 'SchoolBundle\\Controller\\SchoolController::addAction',));
        }

        // listSchools
        if (preg_match('#^/(?P<_locale>[^/]++)/school/list$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'listSchools')), array (  '_controller' => 'SchoolBundle\\Controller\\SchoolController::showAction',));
        }

        // editSchool
        if (preg_match('#^/(?P<_locale>[^/]++)/school/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editSchool')), array (  '_controller' => 'SchoolBundle\\Controller\\SchoolController::editAction',));
        }

        // removeSchool
        if (preg_match('#^/(?P<_locale>[^/]++)/school/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'removeSchool')), array (  '_controller' => 'SchoolBundle\\Controller\\SchoolController::removeAction',));
        }

        // profileSchool
        if (preg_match('#^/(?P<_locale>[^/]++)/school/profile/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'profileSchool')), array (  '_controller' => 'SchoolBundle\\Controller\\SchoolController::profileAction',));
        }

        // mySchool
        if (preg_match('#^/(?P<_locale>[^/]++)/school/mySchool$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mySchool')), array (  '_controller' => 'SchoolBundle\\Controller\\SchoolController::mySchoolAction',));
        }

        // addTransport
        if (preg_match('#^/(?P<_locale>[^/]++)/transport/add$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addTransport')), array (  '_controller' => 'SchoolBundle\\Controller\\TransportController::addAction',));
        }

        // listTransports
        if (preg_match('#^/(?P<_locale>[^/]++)/transport/list$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'listTransports')), array (  '_controller' => 'SchoolBundle\\Controller\\TransportController::showAction',));
        }

        // editTransport
        if (preg_match('#^/(?P<_locale>[^/]++)/transport/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editTransport')), array (  '_controller' => 'SchoolBundle\\Controller\\TransportController::editAction',));
        }

        // removeTransport
        if (preg_match('#^/(?P<_locale>[^/]++)/transport/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'removeTransport')), array (  '_controller' => 'SchoolBundle\\Controller\\TransportController::removeAction',));
        }

        // new_travail
        if (preg_match('#^/(?P<_locale>[^/]++)/travailrealise/new$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_new_travail;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'new_travail')), array (  '_controller' => 'SchoolBundle\\Controller\\TravailRealiseController::addAction',));
        }
        not_new_travail:

        // absence_index
        if (preg_match('#^/(?P<_locale>[^/]++)/absence/?$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_absence_index;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'absence_index');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'absence_index')), array (  '_controller' => 'UserBundle\\Controller\\AbsenceController::indexAction',));
        }
        not_absence_index:

        // absence_new
        if (preg_match('#^/(?P<_locale>[^/]++)/absence/new/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_absence_new;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'absence_new')), array (  '_controller' => 'UserBundle\\Controller\\AbsenceController::newAction',));
        }
        not_absence_new:

        // addAdmin
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/add$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addAdmin')), array (  '_controller' => 'UserBundle\\Controller\\AdminController::addAction',));
        }

        // editAdmin
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editAdmin')), array (  '_controller' => 'UserBundle\\Controller\\AdminController::editAction',));
        }

        // removeAdmin
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'removeAdmin')), array (  '_controller' => 'UserBundle\\Controller\\AdminController::removeAction',));
        }

        // profileAdmin
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/profile/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'profileAdmin')), array (  '_controller' => 'UserBundle\\Controller\\AdminController::profileAction',));
        }

        // myProfileAdmin
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/myProfileAdmin$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myProfileAdmin')), array (  '_controller' => 'UserBundle\\Controller\\AdminController::myProfileAction',));
        }

        // listAdmins
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/list$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'listAdmins')), array (  '_controller' => 'UserBundle\\Controller\\AdminController::showAction',));
        }

        // schoolAdmin
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/school/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'schoolAdmin')), array (  '_controller' => 'UserBundle\\Controller\\AdminController::schoolAction',));
        }

        // assoSchool
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/asso/(?P<id>[^/]++)/(?P<idp>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'assoSchool')), array (  '_controller' => 'UserBundle\\Controller\\AdminController::assoSchoolAction',));
        }

        // homepage
        if (preg_match('#^/(?P<_locale>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'homepage')), array (  '_controller' => 'UserBundle\\Controller\\DefaultController::indexAction',));
        }

        // logpage
        if (preg_match('#^/(?P<_locale>[^/]++)/logpage$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'logpage')), array (  '_controller' => 'UserBundle\\Controller\\DefaultController::dashAction',));
        }

        // lockScreen
        if (preg_match('#^/(?P<_locale>[^/]++)/lockScreen$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lockScreen')), array (  '_controller' => 'UserBundle\\Controller\\DefaultController::lockAction',));
        }

        // addEleve
        if (preg_match('#^/(?P<_locale>[^/]++)/eleve/add$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addEleve')), array (  '_controller' => 'UserBundle\\Controller\\EleveController::addAction',));
        }

        // editEleve
        if (preg_match('#^/(?P<_locale>[^/]++)/eleve/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editEleve')), array (  '_controller' => 'UserBundle\\Controller\\EleveController::editAction',));
        }

        // retardEleve
        if (preg_match('#^/(?P<_locale>[^/]++)/eleve/retard/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'retardEleve')), array (  '_controller' => 'UserBundle\\Controller\\EleveController::retardAction',));
        }

        // absenceEleve
        if (preg_match('#^/(?P<_locale>[^/]++)/eleve/absence/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'absenceEleve')), array (  '_controller' => 'UserBundle\\Controller\\EleveController::absenceAction',));
        }

        // removeEleve
        if (preg_match('#^/(?P<_locale>[^/]++)/eleve/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'removeEleve')), array (  '_controller' => 'UserBundle\\Controller\\EleveController::removeAction',));
        }

        // profileEleve
        if (preg_match('#^/(?P<_locale>[^/]++)/eleve/profile/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'profileEleve')), array (  '_controller' => 'UserBundle\\Controller\\EleveController::profileAction',));
        }

        // myProfileEleve
        if (preg_match('#^/(?P<_locale>[^/]++)/eleve/myProfile$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myProfileEleve')), array (  '_controller' => 'UserBundle\\Controller\\EleveController::myProfileAction',));
        }

        // listEleves
        if (preg_match('#^/(?P<_locale>[^/]++)/eleve/list$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'listEleves')), array (  '_controller' => 'UserBundle\\Controller\\EleveController::showAction',));
        }

        // parentEleve
        if (preg_match('#^/(?P<_locale>[^/]++)/eleve/parent/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'parentEleve')), array (  '_controller' => 'UserBundle\\Controller\\EleveController::parentAction',));
        }

        // assoParent
        if (preg_match('#^/(?P<_locale>[^/]++)/eleve/asso/(?P<id>[^/]++)/(?P<idp>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'assoParent')), array (  '_controller' => 'UserBundle\\Controller\\EleveController::assoParentAction',));
        }

        // addEnseignant
        if (preg_match('#^/(?P<_locale>[^/]++)/enseignant/add$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addEnseignant')), array (  '_controller' => 'UserBundle\\Controller\\EnseignantController::addAction',));
        }

        // editEnseignant
        if (preg_match('#^/(?P<_locale>[^/]++)/enseignant/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editEnseignant')), array (  '_controller' => 'UserBundle\\Controller\\EnseignantController::editAction',));
        }

        // removeEnseignant
        if (preg_match('#^/(?P<_locale>[^/]++)/enseignant/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'removeEnseignant')), array (  '_controller' => 'UserBundle\\Controller\\EnseignantController::removeAction',));
        }

        // profileEnseignant
        if (preg_match('#^/(?P<_locale>[^/]++)/enseignant/profile/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'profileEnseignant')), array (  '_controller' => 'UserBundle\\Controller\\EnseignantController::profileAction',));
        }

        // myProfileEnseignant
        if (preg_match('#^/(?P<_locale>[^/]++)/enseignant/myProfile$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myProfileEnseignant')), array (  '_controller' => 'UserBundle\\Controller\\EnseignantController::myProfileAction',));
        }

        // listEnseignants
        if (preg_match('#^/(?P<_locale>[^/]++)/enseignant/list$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'listEnseignants')), array (  '_controller' => 'UserBundle\\Controller\\EnseignantController::showAction',));
        }

        // listeClasses
        if (preg_match('#^/(?P<_locale>[^/]++)/enseignant/listeClasse/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'listeClasses')), array (  '_controller' => 'UserBundle\\Controller\\EnseignantController::showClasseAction',));
        }

        // addParental
        if (preg_match('#^/(?P<_locale>[^/]++)/parental/add$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addParental')), array (  '_controller' => 'UserBundle\\Controller\\ParentalController::addAction',));
        }

        // editParental
        if (preg_match('#^/(?P<_locale>[^/]++)/parental/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editParental')), array (  '_controller' => 'UserBundle\\Controller\\ParentalController::editAction',));
        }

        // removeParental
        if (preg_match('#^/(?P<_locale>[^/]++)/parental/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'removeParental')), array (  '_controller' => 'UserBundle\\Controller\\ParentalController::removeAction',));
        }

        // profileParental
        if (preg_match('#^/(?P<_locale>[^/]++)/parental/profile/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'profileParental')), array (  '_controller' => 'UserBundle\\Controller\\ParentalController::profileAction',));
        }

        // myProfileParental
        if (preg_match('#^/(?P<_locale>[^/]++)/parental/myProfile$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myProfileParental')), array (  '_controller' => 'UserBundle\\Controller\\ParentalController::myProfileAction',));
        }

        // listParentals
        if (preg_match('#^/(?P<_locale>[^/]++)/parental/list$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'listParentals')), array (  '_controller' => 'UserBundle\\Controller\\ParentalController::showAction',));
        }

        // fos_user_security_login
        if (preg_match('#^/(?P<_locale>[^/]++)/login$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_login;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_security_login')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',));
        }
        not_fos_user_security_login:

        // fos_user_security_check
        if (preg_match('#^/(?P<_locale>[^/]++)/login_check$#s', $pathinfo, $matches)) {
            if ('POST' !== $canonicalMethod) {
                $allow[] = 'POST';
                goto not_fos_user_security_check;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_security_check')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',));
        }
        not_fos_user_security_check:

        // fos_user_security_logout
        if (preg_match('#^/(?P<_locale>[^/]++)/logout$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_logout;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_security_logout')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',));
        }
        not_fos_user_security_logout:

        // fos_user_profile_show
        if (preg_match('#^/(?P<_locale>[^/]++)/profile/?$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_fos_user_profile_show;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_profile_show')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',));
        }
        not_fos_user_profile_show:

        // fos_user_profile_edit
        if (preg_match('#^/(?P<_locale>[^/]++)/profile/edit$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_profile_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_profile_edit')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',));
        }
        not_fos_user_profile_edit:

        // fos_user_registration_register
        if (preg_match('#^/(?P<_locale>[^/]++)/register/?$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_registration_register;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_register')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',));
        }
        not_fos_user_registration_register:

        // fos_user_registration_check_email
        if (preg_match('#^/(?P<_locale>[^/]++)/register/check\\-email$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_fos_user_registration_check_email;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_check_email')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',));
        }
        not_fos_user_registration_check_email:

        // fos_user_registration_confirm
        if (preg_match('#^/(?P<_locale>[^/]++)/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_fos_user_registration_confirm;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
        }
        not_fos_user_registration_confirm:

        // fos_user_registration_confirmed
        if (preg_match('#^/(?P<_locale>[^/]++)/register/confirmed$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_fos_user_registration_confirmed;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirmed')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',));
        }
        not_fos_user_registration_confirmed:

        // fos_user_resetting_request
        if (preg_match('#^/(?P<_locale>[^/]++)/resetting/request$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_fos_user_resetting_request;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_request')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',));
        }
        not_fos_user_resetting_request:

        // fos_user_resetting_send_email
        if (preg_match('#^/(?P<_locale>[^/]++)/resetting/send\\-email$#s', $pathinfo, $matches)) {
            if ('POST' !== $canonicalMethod) {
                $allow[] = 'POST';
                goto not_fos_user_resetting_send_email;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_send_email')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',));
        }
        not_fos_user_resetting_send_email:

        // fos_user_resetting_check_email
        if (preg_match('#^/(?P<_locale>[^/]++)/resetting/check\\-email$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_fos_user_resetting_check_email;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_check_email')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',));
        }
        not_fos_user_resetting_check_email:

        // fos_user_resetting_reset
        if (preg_match('#^/(?P<_locale>[^/]++)/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_resetting_reset;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
        }
        not_fos_user_resetting_reset:

        // fos_user_change_password
        if (preg_match('#^/(?P<_locale>[^/]++)/profile/change\\-password$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_change_password;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_change_password')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',));
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
