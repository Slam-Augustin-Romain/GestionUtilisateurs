<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200409143106 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE classe (id INT AUTO_INCREMENT NOT NULL, diplome_id INT NOT NULL, nom_classe VARCHAR(15) NOT NULL, INDEX IDX_8F87BF9626F859E2 (diplome_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE diplome (id INT AUTO_INCREMENT NOT NULL, typeformation_id INT NOT NULL, nom_diplome VARCHAR(255) NOT NULL, active TINYINT(1) NOT NULL, INDEX IDX_EB4C4D4E47A44D41 (typeformation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE eleves (id INT AUTO_INCREMENT NOT NULL, classe_id INT NOT NULL, enseignementcomp_id INT DEFAULT NULL, nom VARCHAR(30) NOT NULL, prenom VARCHAR(255) NOT NULL, sexe VARCHAR(1) NOT NULL, date_naissance DATE NOT NULL, statut VARCHAR(30) NOT NULL, lv2 VARCHAR(30) DEFAULT NULL, remarque VARCHAR(255) DEFAULT NULL, amenagement_pedagogique VARCHAR(255) DEFAULT NULL, INDEX IDX_383B09B18F5EA509 (classe_id), INDEX IDX_383B09B15C324E27 (enseignementcomp_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE enseignement_comp (id INT AUTO_INCREMENT NOT NULL, diplome_id INT DEFAULT NULL, nom_enseignement_comp VARCHAR(255) NOT NULL, INDEX IDX_86E81FC626F859E2 (diplome_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE etablissement_origine (id INT AUTO_INCREMENT NOT NULL, nomm_etablissement_origine VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_formation (id INT AUTO_INCREMENT NOT NULL, nom_type_formation VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE classe ADD CONSTRAINT FK_8F87BF9626F859E2 FOREIGN KEY (diplome_id) REFERENCES diplome (id)');
        $this->addSql('ALTER TABLE diplome ADD CONSTRAINT FK_EB4C4D4E47A44D41 FOREIGN KEY (typeformation_id) REFERENCES type_formation (id)');
        $this->addSql('ALTER TABLE eleves ADD CONSTRAINT FK_383B09B18F5EA509 FOREIGN KEY (classe_id) REFERENCES classe (id)');
        $this->addSql('ALTER TABLE eleves ADD CONSTRAINT FK_383B09B15C324E27 FOREIGN KEY (enseignementcomp_id) REFERENCES enseignement_comp (id)');
        $this->addSql('ALTER TABLE enseignement_comp ADD CONSTRAINT FK_86E81FC626F859E2 FOREIGN KEY (diplome_id) REFERENCES diplome (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE eleves DROP FOREIGN KEY FK_383B09B18F5EA509');
        $this->addSql('ALTER TABLE classe DROP FOREIGN KEY FK_8F87BF9626F859E2');
        $this->addSql('ALTER TABLE enseignement_comp DROP FOREIGN KEY FK_86E81FC626F859E2');
        $this->addSql('ALTER TABLE eleves DROP FOREIGN KEY FK_383B09B15C324E27');
        $this->addSql('ALTER TABLE diplome DROP FOREIGN KEY FK_EB4C4D4E47A44D41');
        $this->addSql('DROP TABLE classe');
        $this->addSql('DROP TABLE diplome');
        $this->addSql('DROP TABLE eleves');
        $this->addSql('DROP TABLE enseignement_comp');
        $this->addSql('DROP TABLE etablissement_origine');
        $this->addSql('DROP TABLE type_formation');
    }
}
