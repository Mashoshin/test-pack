<?php

declare(strict_types=1);

namespace DataLayer\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211014105704 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create section_result table';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE SEQUENCE section_result_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE section_result (id INT NOT NULL, car_id INT DEFAULT NULL, section_id INT DEFAULT NULL, end_speed NUMERIC(10, 0) NOT NULL, points NUMERIC(10, 0) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_59223335C3C6F69F ON section_result (car_id)');
        $this->addSql('CREATE INDEX IDX_59223335D823E37A ON section_result (section_id)');
        $this->addSql('ALTER TABLE section_result ADD CONSTRAINT FK_59223335C3C6F69F FOREIGN KEY (car_id) REFERENCES car (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE section_result ADD CONSTRAINT FK_59223335D823E37A FOREIGN KEY (section_id) REFERENCES section (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE section_result DROP CONSTRAINT FK_59223335D823E37A');
        $this->addSql('ALTER TABLE section_result DROP CONSTRAINT FK_59223335C3C6F69F');
        $this->addSql('DROP SEQUENCE section_result_id_seq CASCADE');

    }
}
