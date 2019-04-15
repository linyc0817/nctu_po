pipeline {
    agent { docker { image 'node:alpine' } }
    stages {
        stage('Install') {
            steps {
                sh 'npm install --no-cache'
            }
        }
        stage('Build') {
            steps {
                sh 'npm run build'
                sh 'rm -rf node_modules'
                sh 'rm -rf .git'
                sh 'rm .babelrc .gitignore .gitattributes'
                sh 'rm package.json package-lock.json webpack.config.js'
            }
        }
        stage('Deploy') {
            steps {
                sh 'echo "Deploying to Test Host"'
                script {
                    sshPublisher(
                        alwaysPublishFromMaster: true,
                        publishers: [
                            sshPublisherDesc(
                                configName: 'nctu_po_test',
                                verbose: true,
                                transfers: [
                                    sshTransfer(sourceFiles: "**/*.*")
                                ]
                            )
                        ]
                    )
                }
            }
        }
    }
}
