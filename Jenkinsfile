pipeline {
    agent any
    environment {
        DEVOPS_COMMON_USERNAME = credentials("jenkins-devops-common-username")
        DEVOPS_COMMON_PASSWORD = credentials("jenkins-devops-common-password")
    }
    stages {
        stage("Composer Init") {
            steps {
                sh 'composer install'  
                sh "echo $DEVOPS_COMMON_USERNAME"
            }
        }        
        stage("Build") {
            steps {
                sh 'echo hi there'
                sh "php artisan optimize:clear"
            }
        }        
        stage("Acceptance test codeception and deploy") {
            steps {
                sh "echo Everything woking fine so nice."
            }
            post {
                always {
                    sh "echo hi there!"
                    sh "echo Good Morning"
                }
            }
        }
    }
}
