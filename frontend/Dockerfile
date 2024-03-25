# 베이스 이미지 정의
FROM node:latest

# 작업 디렉토리 설정
WORKDIR /usr/src/app

# 필요한 파일 복사
COPY . .

# 필요한 패키지 설치
RUN npm install 

# 포트 노출
EXPOSE 3000

# 진입점 설정
CMD ["npm", "run", "dev"]
