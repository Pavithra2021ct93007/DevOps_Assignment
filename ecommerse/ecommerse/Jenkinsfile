node 
{
    stage('Preparation') 
    {
        git branch: 'main', url: 'https://github.com/bhaarn/DevOpsDemo.git'
    }
    stage('Build') 
    {
      //  dir ('/Users/bhaarn/Documents/Personal/lecture/BITS/Code/Gradle/') 
        dir('/Users/bhaarn/.jenkins/workspace/sonar-git-gradle')
        {
            sh './gradlew compileDebugKotlin'
        }
    }
    
}
