node 
{
    stage('Preparation') 
    {
        git branch: 'main', url: 'https://github.com/Pavithra2021ct93007/DevOps_Assignment.git'
    }
    stage('Build') 
    {
      //  dir ('/Users/bhaarn/Documents/Personal/lecture/BITS/Code/Gradle/') 
       // dir('ecommerse/ecommerse/android/')
        steps{
         script{

            sh '''cd android/
            ./gradlew clean
            ./gradlew build'''
          
    }
    }
}
}
