pipeline {
    agent any
    stages {
        stage("Build") {
            steps {
                sh 'echo hi there'
                sh "php artisan optimize:clear";
            }
        }        
        stage("Acceptance test codeception and deploy") {
            steps {
                sh "echo Everything woking fine so nice."
            }
            post {
                always {
                    sh "echo hi there!"
                }
            }
        }
    }
}
