<?php

namespace App\Model;

use App\Utils\BddConnect;
use App\Model\Roles;

class Utilisateur extends BddConnect
{
    //Attributs
    private ?int $id_utilisateur;
    private ?string $nom_utilisateur;
    private ?string $prenom_utilisateur;
    private ?string $email_utilisateur;
    private ?string $password_utilisateur;
    private ?string $image_utilisateur;
    private ?bool $statut_utilisateur;
    private ?Roles $role;

    //Construct

    public function __construct(){
        $this->role = new Roles();
    }
    
    //Getters et Setters
    public function getId(): ?int
    {
        return $this->id_utilisateur;
    }
    public function setId(?int $id): void
    {
        $this->id_utilisateur = $id;
    }
    public function getNom(): ?string
    {
        return $this->nom_utilisateur;
    }
    public function setNom(?string $nom): void
    {
        $this->nom_utilisateur = $nom;
    }
    public function getPrenom(): ?string
    {
        return $this->prenom_utilisateur;
    }
    public function setPrenom(?string $prenom): void
    {
        $this->prenom_utilisateur = $prenom;
    }
    public function getEmail(): ?string
    {
        return $this->email_utilisateur;
    }
    public function setEmail(?string $email): void
    {
        $this->email_utilisateur = $email;
    }
    public function getPassword(): ?string
    {
        return $this->password_utilisateur;
    }
    public function setPassword(?string $password): void
    {
        $this->password_utilisateur = $password;
    }
    public function getImage(): ?string
    {
        return $this->image_utilisateur;
    }
    public function setImage(?string $image): void
    {
        $this->image_utilisateur = $image;
    }
    public function getStatut(): ?string
    {
        return $this->statut_utilisateur;
    }
    public function setStatut(?string $statut): void
    {
        $this->statut_utilisateur = $statut;
    }
    public function getRoles(): ?Roles
    {
        return $this->role;
    }
    public function setRoles(?Roles $role): void
    {
        $this->role = $role;
    }
}

