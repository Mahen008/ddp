<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220726120108 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE bailleurs (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, secteur_intervation VARCHAR(255) NOT NULL, type_financement VARCHAR(255) NOT NULL, part_financer VARCHAR(255) NOT NULL, maturite VARCHAR(255) NOT NULL, periode_grace VARCHAR(255) DEFAULT NULL, taux_interet VARCHAR(255) NOT NULL, differenciel_interet VARCHAR(255) DEFAULT NULL, frais_gestion VARCHAR(255) DEFAULT NULL, commission_engagement VARCHAR(255) DEFAULT NULL, commission_service VARCHAR(255) DEFAULT NULL, commission_initiale VARCHAR(255) DEFAULT NULL, commission_arragement VARCHAR(255) DEFAULT NULL, frais_exposition VARCHAR(255) DEFAULT NULL, commission_agent VARCHAR(255) DEFAULT NULL, maturite_lettre_credit VARCHAR(255) DEFAULT NULL, frais_ref_lettre_credit VARCHAR(255) DEFAULT NULL, frais_rebours VARCHAR(255) DEFAULT NULL, prime_assurance_frais_garantie VARCHAR(255) DEFAULT NULL, prime_attenuation_risque_credit VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE bailleurs');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
