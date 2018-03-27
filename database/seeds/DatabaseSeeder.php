<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(OcupacionSeeder::class);
        $this->call(EstadoCivilSeeder::class);
        $this->call(EscolaridadSeeder::class);
        $this->call(ReligionSeeder::class);
        $this->call(NacionalidadSeeder::class);
        $this->call(EtniaSeeder::class);
        $this->call(LenguaSeeder::class);
         
        
        $this->call(EstadoSeeder::class);
        $this->call(MunicipioSeeder::class);
        
        $this->call(ColoniasChiapasSeeder::class);
        $this->call(ColoniasCDMXSeeder::class);
        $this->call(ColoniasHidalgoSeeder::class);
        $this->call(ColoniasOaxacaSeeder::class);
        $this->call(ColoniasPueblaSeeder::class);
        $this->call(ColoniasSanLuisPotosiSeeder::class);
        $this->call(ColoniasTabascoSeeder::class);
        $this->call(ColoniasTamaulipasSeeder::class);
        $this->call(ColoniasVeracruzSeeder::class);


        //$this->call(LocalidadSeeder::class);
        //$this->call(LocalidadSeeder2::class);
        $this->call(LocalidadesChiapasSeeder::class);
        $this->call(LocalidadesCDMXSeeder::class);
        $this->call(LocalidadesHidalgoSeeder::class);
        $this->call(LocalidadesOaxacaSeeder::class);
        $this->call(LocalidadesPueblaSeeder::class);
        $this->call(LocalidadesSanLuisPotosiSeeder::class);
        $this->call(LocalidadesTabascoSeeder::class);
        $this->call(LocalidadesTamaulipasSeeder::class);
        $this->call(LocalidadesVeracruzSeeder::class);
        
        $this->call(RazonSeender::class);
        $this->call(PruebaSeeder::class);
        $this->call(GroupSeeder::class);
    }
}
