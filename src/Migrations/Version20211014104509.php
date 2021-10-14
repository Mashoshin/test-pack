<?php

declare(strict_types=1);

namespace DataLayer\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211014104509 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create track table';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE SEQUENCE track_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE track (id INT NOT NULL, state VARCHAR(30) NOT NULL, address VARCHAR(68) NOT NULL, PRIMARY KEY(id))');
        $this->addSql("ALTER TABLE track ADD CHECK (state IN ('in progress', 'completed'))");
    }

    public function down(Schema $schema): void
    {
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE track_id_seq CASCADE');
        $this->addSql('DROP TABLE track');
    }
}
