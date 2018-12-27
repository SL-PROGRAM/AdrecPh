<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181221103535 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE organigrame (id INT AUTO_INCREMENT NOT NULL, page_label VARCHAR(45) NOT NULL, site_path VARCHAR(45) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE site_photo (id INT AUTO_INCREMENT NOT NULL, photo_id INT NOT NULL, organigrame_id INT NOT NULL, site_path VARCHAR(45) NOT NULL, path VARCHAR(45) NOT NULL, INDEX IDX_D0ED541D7E9E4C8C (photo_id), INDEX IDX_D0ED541DB50F5824 (organigrame_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE street_type (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(45) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE site_text (id INT AUTO_INCREMENT NOT NULL, organigrame_id INT NOT NULL, site_path VARCHAR(45) NOT NULL, text VARCHAR(255) NOT NULL, INDEX IDX_111A3EB50F5824 (organigrame_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE livre_dor (id INT AUTO_INCREMENT NOT NULL, text VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE format (id INT AUTO_INCREMENT NOT NULL, format INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE photo (id INT AUTO_INCREMENT NOT NULL, galery_id INT NOT NULL, path VARCHAR(45) NOT NULL, INDEX IDX_14B78418DA40A005 (galery_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE galery (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(45) NOT NULL, statut INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(45) NOT NULL, prenom VARCHAR(45) NOT NULL, tel VARCHAR(10) DEFAULT NULL, email VARCHAR(45) NOT NULL, password VARCHAR(45) NOT NULL, access INT NOT NULL, date_inscription DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE adress (id INT AUTO_INCREMENT NOT NULL, street_type_id INT NOT NULL, user_id INT NOT NULL, number INT DEFAULT NULL, adress_1 VARCHAR(45) NOT NULL, adress_2 VARCHAR(45) DEFAULT NULL, cp VARCHAR(5) NOT NULL, city VARCHAR(45) NOT NULL, INDEX IDX_5CECC7BE9AAD3330 (street_type_id), INDEX IDX_5CECC7BEA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lien_photo_image (id INT AUTO_INCREMENT NOT NULL, commande_id INT NOT NULL, photo_id INT NOT NULL, format_id INT NOT NULL, INDEX IDX_E0FB074582EA2E54 (commande_id), INDEX IDX_E0FB07457E9E4C8C (photo_id), INDEX IDX_E0FB0745D629F605 (format_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commande (id INT AUTO_INCREMENT NOT NULL, statut INT NOT NULL, date DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE site_photo ADD CONSTRAINT FK_D0ED541D7E9E4C8C FOREIGN KEY (photo_id) REFERENCES photo (id)');
        $this->addSql('ALTER TABLE site_photo ADD CONSTRAINT FK_D0ED541DB50F5824 FOREIGN KEY (organigrame_id) REFERENCES organigrame (id)');
        $this->addSql('ALTER TABLE site_text ADD CONSTRAINT FK_111A3EB50F5824 FOREIGN KEY (organigrame_id) REFERENCES organigrame (id)');
        $this->addSql('ALTER TABLE photo ADD CONSTRAINT FK_14B78418DA40A005 FOREIGN KEY (galery_id) REFERENCES galery (id)');
        $this->addSql('ALTER TABLE adress ADD CONSTRAINT FK_5CECC7BE9AAD3330 FOREIGN KEY (street_type_id) REFERENCES street_type (id)');
        $this->addSql('ALTER TABLE adress ADD CONSTRAINT FK_5CECC7BEA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE lien_photo_image ADD CONSTRAINT FK_E0FB074582EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE lien_photo_image ADD CONSTRAINT FK_E0FB07457E9E4C8C FOREIGN KEY (photo_id) REFERENCES photo (id)');
        $this->addSql('ALTER TABLE lien_photo_image ADD CONSTRAINT FK_E0FB0745D629F605 FOREIGN KEY (format_id) REFERENCES format (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE site_photo DROP FOREIGN KEY FK_D0ED541DB50F5824');
        $this->addSql('ALTER TABLE site_text DROP FOREIGN KEY FK_111A3EB50F5824');
        $this->addSql('ALTER TABLE adress DROP FOREIGN KEY FK_5CECC7BE9AAD3330');
        $this->addSql('ALTER TABLE lien_photo_image DROP FOREIGN KEY FK_E0FB0745D629F605');
        $this->addSql('ALTER TABLE site_photo DROP FOREIGN KEY FK_D0ED541D7E9E4C8C');
        $this->addSql('ALTER TABLE lien_photo_image DROP FOREIGN KEY FK_E0FB07457E9E4C8C');
        $this->addSql('ALTER TABLE photo DROP FOREIGN KEY FK_14B78418DA40A005');
        $this->addSql('ALTER TABLE adress DROP FOREIGN KEY FK_5CECC7BEA76ED395');
        $this->addSql('ALTER TABLE lien_photo_image DROP FOREIGN KEY FK_E0FB074582EA2E54');
        $this->addSql('DROP TABLE organigrame');
        $this->addSql('DROP TABLE site_photo');
        $this->addSql('DROP TABLE street_type');
        $this->addSql('DROP TABLE site_text');
        $this->addSql('DROP TABLE livre_dor');
        $this->addSql('DROP TABLE format');
        $this->addSql('DROP TABLE photo');
        $this->addSql('DROP TABLE galery');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE adress');
        $this->addSql('DROP TABLE lien_photo_image');
        $this->addSql('DROP TABLE commande');
    }
}
