<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190116142811 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE adress DROP FOREIGN KEY FK_5CECC7BE9AAD3330');
        $this->addSql('DROP TABLE street_type');
        $this->addSql('ALTER TABLE livre_dor CHANGE user_id user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE fos_user CHANGE galery_id galery_id INT DEFAULT NULL, CHANGE date_inscription date_inscription DATETIME DEFAULT CURRENT_TIMESTAMP, CHANGE salt salt VARCHAR(255) DEFAULT NULL, CHANGE last_login last_login DATETIME DEFAULT NULL, CHANGE confirmation_token confirmation_token VARCHAR(180) DEFAULT NULL, CHANGE password_requested_at password_requested_at DATETIME DEFAULT NULL');
        $this->addSql('DROP INDEX IDX_5CECC7BE9AAD3330 ON adress');
        $this->addSql('ALTER TABLE adress DROP street_type_id, CHANGE number number INT DEFAULT NULL, CHANGE adress_2 adress_2 VARCHAR(45) DEFAULT NULL, CHANGE nom nom VARCHAR(45) DEFAULT NULL, CHANGE prenom prenom VARCHAR(45) DEFAULT NULL, CHANGE tel tel VARCHAR(10) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE street_type (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(45) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE adress ADD street_type_id INT NOT NULL, CHANGE nom nom VARCHAR(45) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE prenom prenom VARCHAR(45) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE tel tel VARCHAR(10) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE number number INT DEFAULT NULL, CHANGE adress_2 adress_2 VARCHAR(45) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE adress ADD CONSTRAINT FK_5CECC7BE9AAD3330 FOREIGN KEY (street_type_id) REFERENCES street_type (id)');
        $this->addSql('CREATE INDEX IDX_5CECC7BE9AAD3330 ON adress (street_type_id)');
        $this->addSql('ALTER TABLE fos_user CHANGE galery_id galery_id INT DEFAULT NULL, CHANGE salt salt VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE last_login last_login DATETIME DEFAULT \'NULL\', CHANGE confirmation_token confirmation_token VARCHAR(180) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE password_requested_at password_requested_at DATETIME DEFAULT \'NULL\', CHANGE date_inscription date_inscription DATETIME DEFAULT \'current_timestamp()\'');
        $this->addSql('ALTER TABLE livre_dor CHANGE user_id user_id INT DEFAULT NULL');
    }
}
