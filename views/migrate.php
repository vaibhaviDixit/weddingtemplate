<?php
errors();
// Define the SQL table names and their corresponding SQL files
        $tables = [
            'logs' => 'auth/logs.sql',
            'guests' => 'weddings/guests.sql',
            // Add more tables as needed
        ];
        
        // Migrate tables
        $migrate = Migrator::migrate($tables);
        
        echo json_encode($migrate);