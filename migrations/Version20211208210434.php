<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211208210434 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE biens_immobiliers (id INT AUTO_INCREMENT NOT NULL, types_logements_id INT NOT NULL, quartier_id INT NOT NULL, chambres_id INT DEFAULT NULL, statut VARCHAR(255) NOT NULL, date_soumis DATETIME NOT NULL, rue_et_numero VARCHAR(255) NOT NULL, code_postal VARCHAR(255) NOT NULL, localite VARCHAR(255) NOT NULL, revenue_cadestral INT NOT NULL, prix INT NOT NULL, types_de_biens VARCHAR(255) NOT NULL, photo_du_bien VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, INDEX IDX_ED62A1E0310F8FCE (types_logements_id), INDEX IDX_ED62A1E0DF1E57AB (quartier_id), INDEX IDX_ED62A1E08BEC3FB7 (chambres_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE chambres (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(100) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE classe_des_biens (id INT AUTO_INCREMENT NOT NULL, code_de_classe INT NOT NULL, types_de_biens VARCHAR(255) NOT NULL, mode_offre VARCHAR(255) NOT NULL, prix_max INT NOT NULL, superficie INT NOT NULL, nbr_chambres INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE client (id_client INT AUTO_INCREMENT NOT NULL, nom_client VARCHAR(255) NOT NULL, rue_et_numero VARCHAR(255) NOT NULL, localite VARCHAR(255) NOT NULL, numero_de_telephone VARCHAR(255) NOT NULL, types_de_biens VARCHAR(255) NOT NULL, PRIMARY KEY(id_client)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commentaire (id INT AUTO_INCREMENT NOT NULL, biensimmobiliers_id INT NOT NULL, user_name VARCHAR(255) NOT NULL, contenu VARCHAR(255) NOT NULL, creat_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_67F068BCCACD5153 (biensimmobiliers_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE proprietaire (id INT AUTO_INCREMENT NOT NULL, nom_proprietaire VARCHAR(255) NOT NULL, rue_et_numero VARCHAR(255) NOT NULL, localite VARCHAR(255) NOT NULL, numero_prive VARCHAR(255) NOT NULL, numero_travail VARCHAR(255) NOT NULL, heure_presence DATETIME NOT NULL, types_de_biens VARCHAR(255) NOT NULL, photo_du_proprietaire VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE quartier (id INT AUTO_INCREMENT NOT NULL, nom_quartier VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE types_logements (id INT AUTO_INCREMENT NOT NULL, nom_type VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, password VARCHAR(255) NOT NULL, username VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE biens_immobiliers ADD CONSTRAINT FK_ED62A1E0310F8FCE FOREIGN KEY (types_logements_id) REFERENCES types_logements (id)');
        $this->addSql('ALTER TABLE biens_immobiliers ADD CONSTRAINT FK_ED62A1E0DF1E57AB FOREIGN KEY (quartier_id) REFERENCES quartier (id)');
        $this->addSql('ALTER TABLE biens_immobiliers ADD CONSTRAINT FK_ED62A1E08BEC3FB7 FOREIGN KEY (chambres_id) REFERENCES chambres (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCCACD5153 FOREIGN KEY (biensimmobiliers_id) REFERENCES biens_immobiliers (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCCACD5153');
        $this->addSql('ALTER TABLE biens_immobiliers DROP FOREIGN KEY FK_ED62A1E08BEC3FB7');
        $this->addSql('ALTER TABLE biens_immobiliers DROP FOREIGN KEY FK_ED62A1E0DF1E57AB');
        $this->addSql('ALTER TABLE biens_immobiliers DROP FOREIGN KEY FK_ED62A1E0310F8FCE');
        $this->addSql('DROP TABLE biens_immobiliers');
        $this->addSql('DROP TABLE chambres');
        $this->addSql('DROP TABLE classe_des_biens');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE commentaire');
        $this->addSql('DROP TABLE proprietaire');
        $this->addSql('DROP TABLE quartier');
        $this->addSql('DROP TABLE types_logements');
        $this->addSql('DROP TABLE user');
    }
}
