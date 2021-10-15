<?php

declare(strict_types=1);

namespace DataLayer\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20211014103920 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create car table';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE SEQUENCE car_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE car (id INT NOT NULL, owner_id INT DEFAULT NULL, address VARCHAR(68) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_773DE69D7E3C61F9 ON car (owner_id)');
        $this->addSql('ALTER TABLE car ADD CONSTRAINT FK_773DE69D7E3C61F9 FOREIGN KEY (owner_id) REFERENCES account (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('SELECT setval(\'car_id_seq\', (SELECT MAX(id) FROM car))');
        $this->addSql('ALTER TABLE car ALTER id SET DEFAULT nextval(\'car_id_seq\')');

    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE car DROP CONSTRAINT FK_773DE69D7E3C61F9');
        $this->addSql('DROP SEQUENCE car_id_seq CASCADE');
        $this->addSql('DROP TABLE car');
    }
}
