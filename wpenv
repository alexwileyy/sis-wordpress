#!/usr/bin/env bash

# File Version 1.0.2

# This handles the calling of the correct docker-compose file depending on the current
# live environment, this file means that the same docker-compose files can be placed into
# both live, test/qa and production environments

# Note: The QA configuration will not use mounted volumes, this results in a substantialy significant
# speed bost. Also, this file must be executed with git bash on Windows. Powershell will not work.


# Select which docker-compose file to use and thus setting the environment
# Options ["dev", "qa"]
APPLICATION_ENV="dev" 


writeHelp(){

    echo "Destructive Digital Docker Environment"
    echo ""
    echo "Current Environment: ${APPLICATION_ENV}"
    echo ""
    echo "This script allows for quick control of a docker project environment, supplied commands"
    echo "are proxied to the appropiate docker compose file, to get started try:"
    echo ""
    echo "Bringing up A project:"
    echo "./ddenv up"
    echo ""
    echo "Tearing down a project:"
    echo "./ddenv down"
    echo ""
    echo "Listing project resource state:"
    echo "./ddenv ps"
    echo ""
    echo ""
    echo "SSH into DB: - Non Windows Only"
    echo "./ddenv ssh-db"
    echo ""
    echo ""
    echo "SSH into wordpress Apache: - Non Windows Only"
    echo "./ddenv ssh-wordpress"
    echo ""
    echo ""
    echo "In order to change the current environement between dev, test/QA and production switch the APPLICATION_ENV variable in this script."
    exit 0
}


# Create docker-compose command selecting the appropiate docker-compose file by environment type (dev or qa etc) 
COMPOSE="docker-compose -f docker-compose.${APPLICATION_ENV}.yaml"

echo "Using ${APPLICATION_ENV} Environment"

# If param is empty show help
if [[ -z $1 ]];then
    writeHelp
fi

case $1 in
    build)
         $COMPOSE build --no-cache;
        ;;
    up)
        # Add the detached flag by default
        $COMPOSE up -d --build;
        ;;
    down)
        read -n1 -p "Have you made sure that the database being used has been exported?? [y,n] " downit
        case $downit in
          y|Y) $COMPOSE down ;;
          n|N) printf "\nExport database before downing environment." ;;
          *) echo dont know ;;
        esac
        ;;
    ssh-db)
         $COMPOSE exec db /bin/bash
        ;;
    ssh-wordpress)
         $COMPOSE exec wordpress /bin/bash
        ;;
    ps)
         $COMPOSE ps
        ;;    
    * | -h | help)
        help
        ;;
esac
