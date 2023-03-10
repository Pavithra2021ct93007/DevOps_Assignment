node 
{
    stage('Preparation') 
    {
        git branch: 'main', url: 'https://github.com/Pavithra2021ct93007/DevOps_Assignment.git'
    }
    stage('Build') 
    {
        dir('C:/ProgramData/Jenkins/.jenkins/workspace/ecommerce/ecommerse/ecommerse/android')
           {
            sh '''cd android/build.gradle
            ./gradlew assemble
            ./gradlew clean
            ./gradlew build'''
          }

   
}
stage('Unit Test')
    {
        dir ('/Users/bhaarn/.jenkins/workspace/sonar-git-gradle/') 
        {
            sh './gradlew test'
        }
    }
    stage('SonarQube Scan') 
    {
        dir ('/Users/bhaarn/.jenkins/workspace/sonar-git-gradle/') 
        {
            sh 'cp ../build.gradle app/build.gradle'
            sh './gradlew sonar -Dsonar.projectKey=bhaarn_DevOpsDemo_AYWHmbpZ7eL8TXLY7M55 -Dsonar.host.url=http://localhost:9000 -Dsonar.login=sqp_1bfd6595cab0f97047cf2b6fb70d27c1917da531'
        }
    }
    stage('Lint Checks')
    {
        dir ('/Users/bhaarn/.jenkins/workspace/sonar-git-gradle/') 
        {
            sh './gradlew lint'
        }
    }
    stage('Results') 
    {   dir ('/Users/bhaarn/Documents/Personal/lecture/BITS/Code/Devops_Shell_Scripts/') 
        {
            sh './start_sonarqube.sh'
            echo 'console'
            sh '/usr/bin/open -a "/Applications/Google Chrome.app" http://localhost:9000/dashboard?id=SonarQubeDemoGradle'
        }
    }
}
