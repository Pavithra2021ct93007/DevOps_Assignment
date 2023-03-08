node 
{
    stage('Preparation') 
    {
        git branch: 'main', url: 'https://github.com/Pavithra2021ct93007/DevOps_Assignment.git'
    }
    stage('Build') 
    {
        dir('ecommerse/ecommerse/')

            sh '''cd android/
            ./gradlew clean
            ./gradlew build'''
          
   
}
}
