<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230817170337 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE enseignant CHANGE nom nom VARCHAR(50) NOT NULL, CHANGE prenom prenom VARCHAR(50) NOT NULL, CHANGE cin cin VARCHAR(20) NOT NULL');
        $this->addSql('ALTER TABLE etudiant DROP etudiant, CHANGE nom nom VARCHAR(50) DEFAULT NULL, CHANGE prenom prenom VARCHAR(50) NOT NULL, CHANGE adresse adresse VARCHAR(255) NOT NULL, CHANGE cne cne VARCHAR(30) NOT NULL');
        $this->addSql('ALTER TABLE semestre CHANGE nom nom VARCHAR(30) NOT NULL');
        $this->addSql('ALTER TABLE user CHANGE username username VARCHAR(50) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE enseignant CHANGE nom nom VARCHAR(255) NOT NULL, CHANGE prenom prenom VARCHAR(255) NOT NULL, CHANGE cin cin VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE etudiant ADD etudiant VARCHAR(255) NOT NULL, CHANGE nom nom VARCHAR(255) NOT NULL, CHANGE prenom prenom VARCHAR(255) NOT NULL, CHANGE adresse adresse VARCHAR(255) DEFAULT NULL, CHANGE cne cne VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE semestre CHANGE nom nom VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE user CHANGE username username VARCHAR(255) DEFAULT NULL');
    }
}
