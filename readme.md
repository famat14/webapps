# Used this link to setup gale.co.in as a wordpress site
# https://cloud.google.com/community/tutorials/run-wordpress-on-appengine-standard

# gmail password

Creating Cloud SQL instance...done.                                                                                                                                                                        
Created [https://www.googleapis.com/sql/v1beta4/projects/fancradle/instances/wordpress].
NAME       DATABASE_VERSION  LOCATION       TIER              PRIMARY_ADDRESS  PRIVATE_ADDRESS  STATUS
wordpress  MYSQL_5_7         us-central1-a  db-n1-standard-1  35.225.84.48     -                RUNNABLE

setting the db password
gcloud sql users set-password root --host=% --instance wordpress --password=zp5FsmFnzNUhx4ry