FROM swift:5.7
WORKDIR /app
COPY . .
RUN swift build -c release
CMD ["./.build/release/Pulcher"]
