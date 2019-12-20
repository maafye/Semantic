<?php
require_once( "sparqllib.php" );

$db = sparql_connect( "http://localhost:3030/channelproduk/sparql" );
if( !$db ) { print sparql_errno() . ": " . sparql_error(). "\n"; exit; }

sparql_ns( "foaf","http://xmlns.com/foaf/0.1/" );
sparql_ns( "geonames","http://learningsparql.com/ns/addressbook#" );
sparql_ns( "dc","http://xmlns.com/foaf/0.1/" );
sparql_ns("rdf", "http://www.w3.org/1999/02/22-rdf-syntax-ns#");
sparql_ns("rdfs", "http://www.w3.org/2000/01/rdf-schema#");

# filename: ex070.rq	

  $sparql = "PREFIX dc:<http://dublincore.org/documents/dcmi-namespace/> 
			PREFIX geonames:<http://www.geonames.org/ontology#> 
			PREFIX foaf:<http://xmlns.com/foaf/0.1/>
           SELECT ?name ?Price ?Description
           WHERE
   {
     ?s dc:name ?name .
	 ?s geonames:Price ?Price .
	 ?s foaf:Description ?Description .
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