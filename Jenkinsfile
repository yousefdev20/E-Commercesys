pipeline {    
    agent any    
    stages {        
        stage("Composer Init") {
            steps {                
                sh "echo hi there"
            }
        }
        stage("Build") {
            steps {
                sh 'echo hi there'
            }
        }
        stage("Acceptance test codeception and deploy") {
            steps {
                sh "echo Everything woking fine so nice."
            }
            post {
                always {
                    sh "echo hi there!"
                    sh "echo Good Morning."                    
                }
            }
        }
    }
}
