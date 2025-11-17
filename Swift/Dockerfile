FROM swift:5.7
WORKDIR /app/pulcher
COPY . .
RUN swift build -c release
CMD ["./.build/release/Pulcher"]
