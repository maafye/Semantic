<?php
require_once( "sparqllib.php" );

$db = sparql_connect( "http://localhost:3030/filmraja/sparql" );
if( !$db ) { print sparql_errno() . ": " . sparql_error(). "\n"; exit; }

sparql_ns( "foaf","http://xmlns.com/foaf/0.1/" );
sparql_ns( "geonames","http://learningsparql.com/ns/addressbook#" );
sparql_ns( "dc","http://xmlns.com/foaf/0.1/" );
sparql_ns("rdf", "http://www.w3.org/1999/02/22-rdf-syntax-ns#");
sparql_ns("rdfs", "http://www.w3.org/2000/01/rdf-schema#");

# filename: ex070.rq	

  $sparql = "PREFIX dbo:<http://dbpedia.org/ontology/> 
PREFIX movie:<http://data.linkedmdb.org/resource/movie/> 
PREFIX db: <http://dbpedia.org/>
PREFIX geo: <http://www.opengis.net/ont/geosparql#>
          SELECT ?Actor ?Genre ?date ?time ?title 
           WHERE
   {
     ?s dbo:Actor ?Actor.
     ?s dbo:Genre ?Genre.
       ?s dbo:date ?date.
       ?s dbo:time ?time.
       ?s dbo:title ?title.


   } ";

   $result = sparql_query( $sparql ); 
   $fields = sparql_field_array( $result );

print "<p>Number of rows: ".sparql_num_rows( $result )." results.</p>";
print "<table class='example_table'>";
print "<tr>";
foreach( $fields as $field )
{
    print "<th>$field</th>";
}
print "</tr>";
while( $row = sparql_fetch_array( $result ) )
{
    print "<tr>";
    foreach( $fields as $field )
    {
        print "<td>$row[$field]</td>";
    }
    print "</tr>";
}
print "</table>";