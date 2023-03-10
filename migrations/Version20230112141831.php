<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230112141831 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE accident (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, low VARCHAR(255) DEFAULT NULL, medium VARCHAR(255) DEFAULT NULL, high VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_8F31DB6FA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE amendes (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, vehicules_id INT DEFAULT NULL, low VARCHAR(255) DEFAULT NULL, medium VARCHAR(255) DEFAULT NULL, high VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_10B4203EA76ED395 (user_id), INDEX IDX_10B4203E8D8BD7E2 (vehicules_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE maintenance (id INT AUTO_INCREMENT NOT NULL, type_entretien VARCHAR(255) NOT NULL, date VARCHAR(255) NOT NULL, price VARCHAR(255) NOT NULL, statut VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vehicules (id INT AUTO_INCREMENT NOT NULL, maintenance_id INT DEFAULT NULL, marque VARCHAR(255) NOT NULL, modele VARCHAR(255) NOT NULL, annee VARCHAR(255) NOT NULL, status VARCHAR(255) NOT NULL, price VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_78218C2DF6C202BC (maintenance_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE accident ADD CONSTRAINT FK_8F31DB6FA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE amendes ADD CONSTRAINT FK_10B4203EA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE amendes ADD CONSTRAINT FK_10B4203E8D8BD7E2 FOREIGN KEY (vehicules_id) REFERENCES vehicules (id)');
        $this->addSql('ALTER TABLE vehicules ADD CONSTRAINT FK_78218C2DF6C202BC FOREIGN KEY (maintenance_id) REFERENCES maintenance (id)');
        $this->addSql('ALTER TABLE user ADD vehicules_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6498D8BD7E2 FOREIGN KEY (vehicules_id) REFERENCES vehicules (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D6498D8BD7E2 ON user (vehicules_id)');
        $this->addSql('CREATE TABLE location (id INT AUTO_INCREMENT NOT NULL, vehicules_id INT DEFAULT NULL, user_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_5E9E89CB8D8BD7E2 (vehicules_id), UNIQUE INDEX UNIQ_5E9E89CBA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE location ADD CONSTRAINT FK_5E9E89CB8D8BD7E2 FOREIGN KEY (vehicules_id) REFERENCES vehicules (id)');
        $this->addSql('ALTER TABLE location ADD CONSTRAINT FK_5E9E89CBA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE amendes DROP FOREIGN KEY FK_10B4203E8D8BD7E2');
        $this->addSql('DROP INDEX IDX_10B4203E8D8BD7E2 ON amendes');
        $this->addSql('ALTER TABLE amendes DROP vehicules_id');
        $this->addSql('ALTER TABLE user ADD accident_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64916D8554C FOREIGN KEY (accident_id) REFERENCES accident (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D64916D8554C ON user (accident_id)');
        $this->addSql('ALTER TABLE vehicules ADD amendes_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE vehicules ADD CONSTRAINT FK_78218C2D113C5E8D FOREIGN KEY (amendes_id) REFERENCES amendes (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_78218C2D113C5E8D ON vehicules (amendes_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6498D8BD7E2');
        $this->addSql('ALTER TABLE accident DROP FOREIGN KEY FK_8F31DB6FA76ED395');
        $this->addSql('ALTER TABLE amendes DROP FOREIGN KEY FK_10B4203EA76ED395');
        $this->addSql('ALTER TABLE amendes DROP FOREIGN KEY FK_10B4203E8D8BD7E2');
        $this->addSql('ALTER TABLE vehicules DROP FOREIGN KEY FK_78218C2DF6C202BC');
        $this->addSql('DROP TABLE accident');
        $this->addSql('DROP TABLE amendes');
        $this->addSql('DROP TABLE maintenance');
        $this->addSql('DROP TABLE vehicules');
        $this->addSql('DROP INDEX UNIQ_8D93D6498D8BD7E2 ON user');
        $this->addSql('ALTER TABLE user DROP vehicules_id');
        $this->addSql('ALTER TABLE location DROP FOREIGN KEY FK_5E9E89CB8D8BD7E2');
        $this->addSql('ALTER TABLE location DROP FOREIGN KEY FK_5E9E89CBA76ED395');
        $this->addSql('DROP TABLE location');
        $this->addSql('ALTER TABLE vehicules DROP FOREIGN KEY FK_78218C2D113C5E8D');
        $this->addSql('DROP INDEX UNIQ_78218C2D113C5E8D ON vehicules');
        $this->addSql('ALTER TABLE vehicules DROP amendes_id');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D64916D8554C');
        $this->addSql('DROP INDEX UNIQ_8D93D64916D8554C ON user');
        $this->addSql('ALTER TABLE user DROP accident_id');
        $this->addSql('ALTER TABLE amendes ADD vehicules_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE amendes ADD CONSTRAINT FK_10B4203E8D8BD7E2 FOREIGN KEY (vehicules_id) REFERENCES vehicules (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_10B4203E8D8BD7E2 ON amendes (vehicules_id)');
    }
}
